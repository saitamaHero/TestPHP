-- ---------------------------------------------------------
-- TEST PHP| PREFERENCES
-- ---------------------------------------------------------

-- ---------------------------------------------------------
-- TABLA DE USUARIOS
-- ---------------------------------------------------------
/*CREATE TABLE Users ( 
       UserName   VARCHAR(15) NOT NULL,
       UserEmail  VARCHAR(320) NOT NULL,
       UserToken  VARCHAR(128) NOT NULL,
       UserSalt   VARCHAR(16) NOT NULL,
       UserStatus BIT NOT NULL DEFAULT 1,
       CONSTRAINT PK_Users PRIMARY KEY(UserName)
)ENGINE=INNODB; */

-- ---------------------------------------------------------
-- TABLA DE PREFERENCIAS DE USUARIO
-- ---------------------------------------------------------
CREATE TABLE UsersPreferences
(
    UserName        VARCHAR(15) NOT NULL,
    PreferenceKey   VARCHAR(10) NOT NULL,
    PreferenceValue VARCHAR(40) NOT NULL,
    PreferenceType  VARCHAR(8)  NOT NULL,
    CONSTRAINT CONSTRAINT_UsersPreferences UNIQUE(PreferenceKey),
    CONSTRAINT FK_User FOREIGN KEY (UserName) REFERENCES Users (UserName)
    ON DELETE CASCADE
	 ON UPDATE RESTRICT
)ENGINE=INNODB;

-- ---------------------------------------------------------
-- REGISTRO DE PRUEBA
-- ---------------------------------------------------------
INSERT INTO Users(UserName, UserEmail, UserToken, UserSalt)
VALUES ('saitamaHero', 'tec.dionicioacevedo@gmail.com', '089457939DE028327F44291412EBFF43D5CE6AF913BEA2E0DF3902B000B04C0CF67E982467FCC5A4388EE3F2E7BFEC5EA00D720279578380B2EB50EA1E9D4F77',
'+xA2FTWCX$$6778q');
INSERT INTO UsersPreferences
(UserName, PreferenceKey,PreferenceValue, PreferenceType) VALUES('saitamaHero', 'welcomeMsg', 'Hola Amigo>', 'string');