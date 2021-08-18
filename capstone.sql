CREATE TABLE WUser (
    UserID int AUTO_INCREMENT,
    UserName varchar(25) UNIQUE,
    Pass varchar(25),
    Lat varchar(25),
    Lot varchar(25),
    PRIMARY KEY (UserID)
);

CREATE TABLE Post (
    PostID int AUTO_INCREMENT,
    PostTitle varchar(55),
    Cont varchar(255),
    Tag varchar(55),
    Rating int,
    UserID int,
    UserName varchar(25),
    PRIMARY KEY (PostID),
    FOREIGN KEY (UserID) REFERENCES WUser(UserID)
       ON DELETE CASCADE
       ON UPDATE CASCADE
);

CREATE TABLE Panes (
    PaneID int AUTO_INCREMENT,
    Datum varchar(255),
    PostID int,
    PRIMARY KEY (PaneID),
    FOREIGN KEY (PostID) REFERENCES Post(PostID)
       ON DELETE CASCADE
       ON UPDATE CASCADE
);

CREATE TABLE Places(
    PlaceID int AUTO_INCREMENT,
    Pname varchar(255) UNIQUE,
    Des varchar(255),
    Lat varchar(255),
    Lot varchar(255),
    img varchar(255),	
    PRIMARY KEY(PlaceID)
);

CREATE TABLE Itinerary (
    PlaceID int AUTO_INCREMENT,
    PlaceName varchar(255),
    Des varchar(255),
    lat varchar(255),
    lot varchar(255),
    img varchar(255),
    UserID int,
    PRIMARY KEY (PlaceID),
    FOREIGN KEY (UserID) REFERENCES WUser(UserID)
       ON DELETE CASCADE
       ON UPDATE CASCADE
);



