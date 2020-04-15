CREATE TABLE `AlbumsTable` (
  `ID` varchar(32) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `CD_Numbers` varchar(32) NOT NULL,
  `Total_Tracks` varchar(32) NOT NULL,
  `Genre` varchar(200) NOT NULL,
  `Release_Year` varchar(32) NOT NULL,
  `FrontCover_Path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Table that have the albums details';

CREATE TABLE `ArtistTable` (
  `Name` varchar(300) NOT NULL,
  `ID` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='table for storing artist names';

CREATE TABLE `UserTable` (
  `ID` varchar(32) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `FirstName` varchar(300) NOT NULL,
  `MidName` varchar(200) DEFAULT NULL,
  `LastName` varchar(300) NOT NULL,
  `Salt` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `Email` varchar(500) NOT NULL,
  PRIMARY KEY (`UserName`),
  UNIQUE KEY `UserTable_UN` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='User Information';

CREATE TABLE `AlbumArtistsTable` (
  `AlbumID` varchar(32) NOT NULL,
  `ArtistID` varchar(32) NOT NULL,
  PRIMARY KEY (`AlbumID`,`ArtistID`),
  KEY `AlbumArtistsTable_FK_ArtistTable` (`ArtistID`),
  CONSTRAINT `AlbumArtistsTable_FK_AlbumTable` FOREIGN KEY (`AlbumID`) REFERENCES `AlbumsTable` (`ID`),
  CONSTRAINT `AlbumArtistsTable_FK_ArtistTable` FOREIGN KEY (`ArtistID`) REFERENCES `ArtistTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='make the relation between the Albums and the Artists';

CREATE TABLE `Playlists` (
  `ID` varchar(32) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `CreateDate` date NOT NULL,
  `Public` tinyint(1) NOT NULL,
  `NumberOfTracks` varchar(32) DEFAULT NULL,
  `ModifiedDate` date NOT NULL,
  `Information` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Playlists_FK` (`userid`),
  CONSTRAINT `Playlists_FK` FOREIGN KEY (`userid`) REFERENCES `UserTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Playlists Information';

CREATE TABLE `SongTable` (
  `ID` varchar(32) NOT NULL,
  `AlbumID` varchar(32) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Path` varchar(1000) NOT NULL,
  `Track_Number` varchar(32) NOT NULL,
  `CD_Number` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `SongTable_FK` (`AlbumID`),
  CONSTRAINT `SongTable_FK` FOREIGN KEY (`AlbumID`) REFERENCES `AlbumsTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Information About the Tracks';

CREATE TABLE `PlaylistSongTable` (
  `ID` varchar(32) NOT NULL,
  `PlaylistID` varchar(32) NOT NULL,
  `SongID` varchar(32) NOT NULL,
  `Position` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PlaylistSongTable_FK_Playlists` (`PlaylistID`),
  KEY `PlaylistSongTable_FK_SongTable` (`SongID`),
  CONSTRAINT `PlaylistSongTable_FK_Playlists` FOREIGN KEY (`PlaylistID`) REFERENCES `Playlists` (`ID`),
  CONSTRAINT `PlaylistSongTable_FK_SongTable` FOREIGN KEY (`SongID`) REFERENCES `SongTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='the Relation and the position of the song in a Playlist';

CREATE TABLE `SongArtistTable` (
  `SongID` varchar(32) NOT NULL,
  `ArtistID` varchar(32) NOT NULL,
  PRIMARY KEY (`SongID`,`ArtistID`),
  KEY `SongArtistTable_FK_ArtistTable` (`ArtistID`),
  CONSTRAINT `SongArtistTable_FK_ArtistTable` FOREIGN KEY (`ArtistID`) REFERENCES `ArtistTable` (`ID`),
  CONSTRAINT `SongArtistTable_FK_SongTable` FOREIGN KEY (`SongID`) REFERENCES `SongTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Make the Relation Between the Song and the Artists';
