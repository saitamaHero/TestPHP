-- ---------------------------------------------------------
-- TEST PHP| PREFERENCES
-- ---------------------------------------------------------

CREATE TABLE Users
(
 UserName  VARCHAR(15)  NOT NULL,
 UserEmail VARCHAR(320) NOT NULL,
 UserToken VARCHAR(128) NOT NULL,
 UserSalt  VARCHAR(16)  NOT NULL,
 CONSTRAINT PK_Users PRIMARY KEY(UserName) 
)ENGINE=InnoDB; 


/* registro de prueba
insert into Users(UserName, UserEmail, UserToken, UserSalt)
values ('saitamaHero', 'tec.dionicioacevedo@gmail.com', '089457939DE028327F44291412EBFF43D5CE6AF913BEA2E0DF3902B000B04C0CF67E982467FCC5A4388EE3F2E7BFEC5EA00D720279578380B2EB50EA1E9D4F77',
'+xA2FTWCX$$6778q');*/