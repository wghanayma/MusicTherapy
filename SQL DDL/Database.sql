CREATE TABLE `AlbumsTable` (
  `ID` int(10) unsigned NOT NULL,
  `Name` varchar(300) NOT NULL,
  `CD_Numbers` int(10) unsigned NOT NULL,
  `Total_Tracks` int(10) unsigned NOT NULL,
  `Genre` varchar(200) NOT NULL,
  `Release_Year` int(10) unsigned NOT NULL,
  `FrontCover_Path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='Table that have the albums details';

CREATE TABLE `ArtistTable` (
  `Name` varchar(300) NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='table for storing artist names';

CREATE TABLE `UserTable` (
  `ID` int(10) unsigned NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `FirstName` varchar(300) NOT NULL,
  `MidName` varchar(200) DEFAULT NULL,
  `LastName` varchar(300) NOT NULL,
  `Salt` varchar(200) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `BirthDate` date NOT NULL,
  `Email` varchar(500) NOT NULL,
  PRIMARY KEY (`UserName`),
  UNIQUE KEY `UserTable_UN` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='User Information';

CREATE TABLE `AlbumArtistsTable` (
  `AlbumID` int(10) unsigned NOT NULL,
  `ArtistID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`AlbumID`,`ArtistID`),
  KEY `AlbumArtistsTable_FK_ArtistTable` (`ArtistID`),
  CONSTRAINT `AlbumArtistsTable_FK_AlbumTable` FOREIGN KEY (`AlbumID`) REFERENCES `AlbumsTable` (`ID`),
  CONSTRAINT `AlbumArtistsTable_FK_ArtistTable` FOREIGN KEY (`ArtistID`) REFERENCES `ArtistTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='make the relation between the Albums and the Artists';

CREATE TABLE `Playlists` (
  `ID` int(10) unsigned NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  `Name` varchar(100) NOT NULL,
  `CreateDate` date NOT NULL,
  `Public` tinyint(1) NOT NULL,
  `NumberOfTracks` int(10) unsigned DEFAULT NULL,
  `ModifiedDate` date NOT NULL,
  `Information` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Playlists_FK` (`userid`),
  CONSTRAINT `Playlists_FK` FOREIGN KEY (`userid`) REFERENCES `UserTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='Playlists Information';

CREATE TABLE `SongTable` (
  `ID` int(10) unsigned NOT NULL,
  `AlbumID` int(10) unsigned NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Path` varchar(1000) NOT NULL,
  `Track_Number` int(10) unsigned NOT NULL,
  `CD_Number` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `SongTable_FK` (`AlbumID`),
  CONSTRAINT `SongTable_FK` FOREIGN KEY (`AlbumID`) REFERENCES `AlbumsTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Information About the Tracks';

CREATE TABLE `PlaylistSongTable` (
  `ID` int(10) unsigned NOT NULL,
  `PlaylistID` int(10) unsigned NOT NULL,
  `SongID` int(10) unsigned NOT NULL,
  `Position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PlaylistSongTable_FK_Playlists` (`PlaylistID`),
  KEY `PlaylistSongTable_FK_SongTable` (`SongID`),
  CONSTRAINT `PlaylistSongTable_FK_Playlists` FOREIGN KEY (`PlaylistID`) REFERENCES `Playlists` (`ID`),
  CONSTRAINT `PlaylistSongTable_FK_SongTable` FOREIGN KEY (`SongID`) REFERENCES `SongTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='the Relation and the position of the song in a Playlist';

CREATE TABLE `SongArtistTable` (
  `SongID` int(10) unsigned NOT NULL,
  `ArtistID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`SongID`,`ArtistID`),
  KEY `SongArtistTable_FK_ArtistTable` (`ArtistID`),
  CONSTRAINT `SongArtistTable_FK_ArtistTable` FOREIGN KEY (`ArtistID`) REFERENCES `ArtistTable` (`ID`),
  CONSTRAINT `SongArtistTable_FK_SongTable` FOREIGN KEY (`SongID`) REFERENCES `SongTable` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COMMENT='Make the Relation Between the Song and the Artists';