CREATE  TABLE "user" (
	id_user              SERIAL NOT NULL  ,
	name_user            varchar(50)  NOT NULL  ,
	pass_user            varchar(50)  NOT NULL  ,
	CONSTRAINT pk_tbl PRIMARY KEY ( id_user )
 );

INSERT INTO "user" VALUES (DEFAULT,'admin','admin') ;

CREATE  TABLE citation (
	id_citation          SERIAL NOT NULL  ,
	auteur_citation      varchar(50)    ,
	valeur_citation      text    ,
	image_auteur         varchar(250)    ,
	fonction_auteur      varchar(250)    ,
	CONSTRAINT pk_citation PRIMARY KEY ( id_citation )
 );

 CREATE  TABLE news (
	id_news              SERIAL NOT NULL  ,
	title_news           varchar(250)  NOT NULL  ,
	date_news            date DEFAULT CURRENT_DATE   ,
	summary_news         text    ,
	contains_news        text    ,
	image_news           varchar(250)    ,
	CONSTRAINT pk_news PRIMARY KEY ( id_news )
 );

