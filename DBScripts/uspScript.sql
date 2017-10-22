use Lighthouse
go

create procedure testUserName
	(
		@paramUserName varchar(500),
		@paramAvailable bit output
	)
as
	if (select distinct * from Person where UserName = @paramUserName) is null
		