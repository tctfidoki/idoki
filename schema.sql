use doki;

create table User(
id int PRIMARY KEY AUTO_INCREMENT,
username varchar(100),
password varchar(200),
like_limit int not null,
like_day int,
vote_time date NOT NULL
);
create table Idol(
id int PRIMARY KEY AUTO_INCREMENT,
idolname varchar(100),
like_total int
);
create table Pickidol(
userid int,
idolid int,
like_total int
); 
insert into Idol(id,idolname,like_total) values (null,'zzn',999);
insert into Idol(id,idolname,like_total) values (null,'hll',555);
insert into Idol(id,idolname,like_total) values (null,'yxj',444);
insert into Idol(id,idolname,like_total) values (null,'xzg',666);
insert into Idol(id,idolname,like_total) values (null,'yc',333);
insert into Idol(id,idolname,like_total) values (null,'zxw',6666);
insert into Idol(id,idolname,like_total) values (null,'zyq',888);
insert into Idol(id,idolname,like_total) values (null,'ly',777);
insert into Idol(id,idolname,like_total) values (null,'rh',789);
insert into Idol(id,idolname,like_total) values (null,'zl',345);
insert into Idol(id,idolname,like_total) values (null,'zr',654);
insert into Idol(id,idolname,like_total) values (null,'xz',999); 

