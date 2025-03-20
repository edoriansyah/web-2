CREATE TABLE IF NOT EXISTS publishers (
    publisher_id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (publisher_id)
);

CREATE TABLE IF NOT EXISTS books (
    book_id INT AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    isbn VARCHAR(13) NULL,
    published_date DATE NULL,
    publisher_id INT NULL,
    PRIMARY KEY (book_id),
    CONSTRAINT fk_publisher FOREIGN KEY (publisher_id)
        REFERENCES publishers (publisher_id)
);

CREATE TABLE authors( 
  author_id   INT AUTO_INCREMENT,
  first_name  VARCHAR(100) NOT NULL, 
  middle_name VARCHAR(50) NULL, 
  last_name   VARCHAR(100) NULL,
  PRIMARY KEY(author_id)
);

CREATE TABLE book_authors (
  book_id   INT NOT NULL, 
  author_id INT NOT NULL, 
  PRIMARY KEY(book_id, author_id), 
  CONSTRAINT fk_book 
    FOREIGN KEY(book_id) 
    REFERENCES books(book_id) ON DELETE CASCADE, 
  CONSTRAINT fk_author 
    FOREIGN KEY(author_id) 
    REFERENCES authors(author_id) ON DELETE CASCADE
);
