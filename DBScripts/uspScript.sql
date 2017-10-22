use Lighthouse
go

create procedure uspTestUserName
	(
		@paramUserName varchar(500),
		@paramAvailable bit output
	)
as
	if exists (select top 1 * from Person where UserName = @paramUserName)
		set @paramAvailable = 1; --the name is available.
	else
		set @paramAvailable = 0; --the name is not available.

go

create procedure uspTestPassword
	(
		@paramUserName nvarchar(500),
		@paramPassword nvarchar(500),
		@paramCorrect bit output
	)
as
	declare @UserPass nvarchar(500)
	set @UserPass = (select top 1 UserPass from Person where UserName = @paramUserName)
	if(@UserPass = @paramPassword)
		set @paramCorrect = 1;
	else
		set @paramCorrect = 0;
go

create procedure uspGetCountryID
	(
		@paramCountryName nvarchar(500),
		@paramCountryID nvarchar(500) output
	)
as
	set @paramCountryID = (select top 1 CountryID from Country where CountryName = @paramCountryName)
go

create procedure uspGetJargonID
	(
		@paramJargonName nvarchar(500),
		@paramJargonID nvarchar(500) output
	)
as
	set @paramJargonID = (select top 1 JargonID from Jargon where JargonName = @paramJargonName)
go

create procedure uspGetGenderID
	(
		@paramGenderName nvarchar(500),
		@paramGenderID nvarchar(500) output
	)
as
	set @paramGenderID = (select top 1 GenderID from Gender where GenderName = @paramGenderName)
go

create procedure uspInsertPerson
	(
		@paramCountryName nvarchar(500),
		@paramJargonName nvarchar(500),
		@paramEmail nvarchar(500),
		@paramUserName nvarchar(500),
		@paramUserPassword nvarchar(500),
		@paramGenderName nvarchar(500),
		@paramCulture nvarchar(500) = null,
		@paramPersonDescr nvarchar(500) = null
	)
as
	declare @CountryID int
	exec uspGetCountryID @paramCountryName = @paramCountryName, @paramCountryID = @CountryID output
	declare @JargonID int
	exec uspGetJargonID @paramJargonName = @paramJargonName, @paramJargonID = @JargonID output
	declare @GenderID int
	exec uspGetGenderID @paramGenderName = @paramGenderName, @paramGenderID = @GenderID output

	insert into Person
		(CountryID,JargonID,Email,UserName,UserPass,GenderID,Culture,PersonDescription)
	values
		(@CountryID,@JargonID,@paramEmail,@paramUserName,@paramUserPassword,
		@GenderID,@paramCulture,@paramPersonDescr)
go
