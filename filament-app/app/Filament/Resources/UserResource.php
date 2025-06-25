<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')->maxLength(255)->required(),
                        Forms\Components\TextInput::make('email')
                            ->maxLength(255)
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->revealable()
                            ->maxLength(255)
                            ->dehydrateStateUsing(
                                static fn(null|string $state): null|string => filled($state) ? Hash::make($state) : null,
                            )->required(
                                static fn(Page $livewire): bool => $livewire instanceof CreateUser,
                            )->dehydrated(
                                static fn(null|string $state): bool => filled($state),
                            )->label(
                                static fn(Page $livewire): string => ($livewire instanceof EditUser) ? 'New Password' : 'Password'
                            ),
                        Forms\Components\Select::make('roles')
                            ->multiple()
                            ->relationship('roles', 'name')
                            ->preload()
                            ->native(false)
                            ->searchable()
                            ->required(),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('roles.name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y H:i')->sortable(),
                Tables\Columns\TextColumn::make('email_verified_at')->dateTime('d M Y H:i')->toggleable()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('Verify email')
                    ->action(fn(User $user) => $user->markEmailAsVerified())
                    ->requiresConfirmation()
                    ->modalIcon('heroicon-s-check-badge')
                    ->modalHeading('Verify email')
                    ->modalDescription('Are you sure you want to verify this user email?')
                    ->modalSubmitActionLabel('Yes, I am sure')
                    ->modalCancelActionLabel('No, take me back')
                    ->label('Verify')
                    ->icon('heroicon-s-check-badge')
                    ->color('success')
                    ->visible(fn(User $user) => !$user->hasVerifiedEmail()),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
