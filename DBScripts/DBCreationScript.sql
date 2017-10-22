use master
go
if exists (select name from sysdatabases where name='Lighthouse')
	drop database Lighthouse
	go
create database Lighthouse
go
use Lighthouse
go

create table QuestionFormat (
	QuestionFormatID int identity(1,1) not null,
	QuestionFormatName varchar(500) not null,
	QuestionFormatDescr varchar(500)

	constraint pk_QuestionFormat primary key (QuestionFormatID)
	);
go

create table Question (
	QuestionID int identity(1,1) not null,
	QuestionName varchar(500) not null,
	QuestionDescr varchar(500),
	QuestionFormatID int

	constraint pk_Question primary key (QuestionID),
	constraint fk_Question_QuestionFormat foreign key (QuestionFormatID) references QuestionFormat(QuestionFormatID)
	);
go

create table Quiz (
	QuizID int identity(1,1) not null,
	QuizRating int not null

	constraint pk_Quiz primary key (QuizID)
	);
go

create table Quiz_Question (
	Quiz_QuestionID int identity(1,1) not null,
	QuizID int not null,
	QuestionID int not null,
	QuestionAnswer varchar(500) --allow user not to answer question.

	constraint pk_Quiz_Question primary key (Quiz_QuestionID),
	constraint fk_Quiz_Question_Question foreign key (QuestionID) references Question (QuestionID),
	constraint fk_Quiz_Question_Quiz foreign key (QuizID) references Quiz (QuizID)
	);
go

create table Img (
	ImgID int identity(1,1) not null,
	ImgPath nvarchar(500) not null unique,
	ImgRatio numeric not null

	constraint pk_Img primary key (ImgID)
	);
go

create table Country (
	CountryID int identity(1,1) not null,
	CountryName nvarchar(500) not null,
	CountryDescr nvarchar(500),
	ImgID int

	constraint pk_Country primary key (CountryID),
	constraint fk_Country_Img foreign key (ImgID) references Img (ImgID)
	);
go

create table Jargon(
	JargonID int identity(1,1) not null,
	JargonName nvarchar(500) not null,
	JargonDescription nvarchar(500)

	constraint pk_Jargon primary key (JargonID)
	);
go

create table Gender (
	GenderID int identity(1,1) not null,
	GenderName nvarchar(500) not null,
	GenderDescr nvarchar(500)

	constraint pk_Gender primary key (GenderID)
	);
go

create table Person (
	PersonID int identity(1,1) not null,
	CountryID int not null,
	JargonID int not null,
	Email nvarchar(500) not null,
	UserName nvarchar(500) not null unique,
	UserPass nvarchar(500) not null,
	GenderID int not null,
	Culture nvarchar(500),
	PersonDescription nvarchar(500),
	PersonStartDateTime datetime default (getdate()),
	ImgID int

	constraint pk_Person primary key (PersonID),
	constraint fk_Person_Country foreign key (CountryID) references Country (CountryID),
	constraint fk_Person_Jargon foreign key (JargonID) references Jargon (JargonID),
	constraint fk_Person_Gender foreign key (GenderID) references Gender (GenderID),
	constraint fk_Person_Img foreign key (ImgID) references Img (ImgID)
	)
go

create table PenPal (
	PenPalID int identity(1,1) not null,
	Person1ID int not null,
	Person2ID int not null,
	Quiz1ID int not null,
	Quiz2ID int not null,
	StartDateTime datetime default (getdate()) not null

	constraint pk_PenPal primary key (PenPalID),
	constraint fk_PenPal_Person_1 foreign key (Person1ID) references Person (PersonID),
	constraint fk_PenPal_Person_2 foreign key (Person2ID) references Person (PersonID),
	constraint fk_PenPal_Quiz_1 foreign key (Quiz1ID) references Quiz (QuizID),
	constraint fk_PenPal_Quiz_2 foreign key (Quiz2ID) references Quiz (QuizID)
	);
go

create table PenPal_Img (
	PenPal_ImgID int identity(1,1) not null,
	PenPalID int not null,
	PersonID int not null,
	ImgID int not null,
	Annotation nvarchar(500)

	constraint pk_PenPal_Img primary key (PenPal_ImgID),
	constraint fk_PenPal_Img_PenPal foreign key (PenPalID) references PenPal (PenPalID),
	constraint fk_PenPal_Img_Person foreign key (PersonID) references Person (PersonID),
	constraint fk_PenPal_Img_Img foreign key (ImgID) references Img (ImgID)
	);
go