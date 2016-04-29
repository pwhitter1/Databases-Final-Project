create table State (
	stateName varchar(255) NOT NULL,
	electoralVotes int(11),
	swing varchar(1),
	primary key (stateName)
);

create table CurrentPrimaryData (
	winnerName varchar(255) NOT NULL,
	party varchar(255),
	stateName varchar(255),
	primary key (winnerName, stateName),
	foreign key (stateName) references State (stateName)
);

create table Twitter (
	candidateName varchar(255) NOT NULL,
	percentPositive double,
	percentNegative double,
	percentNeutral double,
	primary key (candidateName),
	foreign key (candidateName) references CurrentPrimaryData (winnerName)
);

create table HistoricalPrimaryData (
	year int(4),
	winnerName varchar(255),
	party varchar(255),
	statesWon int(11),
	primary key (winnerName, year)
);

create table HistoricalGenElectionData (
	year int(4) NOT NULL,
	candidateName varchar(255) NOT NULL,
	party varchar(255),
	wonElection varchar(1),
	statesWon int(11),
	electoralVotes int(11)
);