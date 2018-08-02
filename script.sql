create table login(
	id int primary key auto_increment,
	nome varchar(150) not null,
	login varchar(50) not null,
	email varchar(150) not null,
	senha varchar(255) not null
);

insert into login values(null, 'Ze das Coves', 'zecoves', 'coves.ze@gmail.com', '123');