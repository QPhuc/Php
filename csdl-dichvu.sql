create table admin (
id bigint not null primary key auto_increment,
username varchar (150) not null,
password varchar (150) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

create table khachhang_thuong (
id bigint not null primary key auto_increment,
sdt int not null,
diachi varchar (255) not null,
dichvudangky varchar (255) not null,
content text null,
status int not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table khachhang (
id bigint not null primary key auto_increment,
username varchar (150) not null,
password varchar (150) not null,
fullname varchar (150) null,
sdt int not null,
diachi varchar (255) not null,
dichvudangky varchar (255) not null,
content text null,
status int not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table news (
id bigint not null primary key auto_increment,
title varchar(255) null,
descripsion varchar(150) not null,
status int not null,
thumbnail varchar(150) null,
content text not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table kho (
id bigint not null primary key auto_increment,
tenkho varchar(150) not null
);
create table loaisim (
id bigint not null primary key auto_increment,
tenloaisim varchar(150) not null,
content text null
);
insert into loaisim(tenloaisim,content) values('Sim Thường','Sim Thường đơn giản hiểu là những chiếc sim điện thoại di động có các dãy số ấn tượng, độc đáo nhưng giá thành lại khá phải chăng. Hơn nữa nó phải là  một chiếc sim phù hợp mới mục đích sử dụng và khả năng tài chính cho phép của người mua sim.');
insert into loaisim(tenloaisim,content) values('Sim Tứ Quý','Sim Tứ quý là dòng sim dành cho dân sành chơi sim. Nói quả thật không ngoa, để sở hữu được một số sim tứ quý, chủ sở hữu không chỉ phải bỏ ra một khoản kha khá mà còn phải thực sự am hiểu về dòng sim độc đáo này. Chính vì vậy đây chính là dòng sim luôn được các tín đồ chơi sim chào đón và săn lùng!<br>Các bộ tứ quý khá đa dạng cho bạn chọn lựa như: 0000, 1111, 2222, 3333, 4444, 5555, 6666, 7777, 8888, 9999.');
insert into loaisim(tenloaisim,content) values('Sim Thần Tài','Sim Thần Tài hay còn được gọi là Sim Tài Lộc là dòng sim được người dùng sở hữu với mong ước mang lại may mắn, tiền tài.<br> Sim thần tài là dòng sim số đẹp có chứa cụm Thần tài nhỏ (39), Thần tài lớn (79), Thần tài kép nhỏ (3939), Thần tài kép lớn (7979), Thần tài kép (3979/ 7939) ở đuôi sim.');
insert into loaisim(tenloaisim,content) values('Sim Ông Địa','Sim Ông Địa đơn giản là 1 trong các dòng sim số đẹp có chứa số đuôi là các cặp số 38 (Ông địa nhỏ) và 78 (Ông địa lớn) hoặc kết hợp cả 2 cặp số ông địa này đều mang đến những hiệu ứng đẹp trong dãy số sim. ');
insert into loaisim(tenloaisim,content) values('Sim Đại Cát','Sim Đại Cát là dòng sim đặc biệt, mang đến may mắn, bình an, thuận lợi, cát lộc cho chủ sở hữu, đồng thời có tác dụng chiêu tài kích lộc, cho công việc thuận buồm xuôi gió. Nếu sở hữu được số sim đại cát thì cuộc sống của bạn nhanh chóng nở hoa, công thành danh toại.<br>Tùy thuộc vào dạng sim Đại Cát mà bạn chọn như cách kết hợp với đầu số, cụm số giữa, đuôi năm sinh... mà giá sim được chia thành nhiều phân khúc giá khác nhau với giá từ hơn vài trăm cho đến hơn vài  tỷ đồng. ');
insert into loaisim(tenloaisim,content) values('Sim Tiến Lên','Sim Tiến Lên (hay còn gọi là sim số tiến) là dạng sim số đẹp với sự sắp xếp các con số theo chiều hướng tiến lên, có thể tiến lên liên tục hoặc tiến lên chẵn, lẻ. VD: *1234, *2468, *1357<br>Sim tiến lên đơn là sim có đuôi số chỉ chứa duy nhất một dãy số tiến lên gồm 3 chữ số hoặc có thể nhiều hơn. Ví dụ như: 0981.532.567,... <br>Sim tiến đôi là loại sim có đuôi số gồm có 2 cặp số tiến lên hoặc 3 cặp nằm liên tiếp với nhau.<br>VD: 0385.689.789,...');
insert into loaisim(tenloaisim,content) values('Sim Taxi','"Sim Taxi - Bí quyết thành công của các hãng Taxi đời đầu". Hầu hết chủ nhân của các hãng taxi lớn khi được hỏi về bí quyết thành công khi xây dựng nên những thương hiệu và một trong số những bí quyết của họ chính là việc lựa chọn số điện thoại đẹp và dễ gây ấn tượng với cộng đồng.<br>Các loại sim taxi là dòng sim gồm những dạng dưới đây:<br>Sim taxi 2: Sim có dạng ab.ab.ab VD: *63.63.63...<br>Sim taxi 3: Sim có dạng abc.abc  VD: *789.789...<br>Sim taxi 4: Sim có dạng abcd.abcd VD: *2888.2888');
insert into loaisim(tenloaisim) values('Sim Năm Sinh');
create table sim (
id bigint not null primary key auto_increment,
sdt varchar(20) not null,
gianhap int not null,
giaban int not null,
status int not null,
idloaisim bigint not null,
idkho bigint not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
alter table sim add constraint fk_sim_loaisim foreign key(idloaisim) references loaisim(id);
alter table sim add constraint fk_user_role foreign key(idkho) references kho(id);