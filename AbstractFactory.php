<?php

abstract class AbstractFactory
{
    abstract public function DBConnection() : Connection;

    abstract public function DBRecord() : Record;

    public function DBQueryBuilder() : QueryBuilder
    {

        $connection = $this->DBConnection();
        $record = $this->DBRecord();
        $builder = $this->DBQueryBuilder($connection);
    }
}


class MySQLFactory extends AbstractFactory
{
    public function DBConection() : Connection
    {
        return new MySQLConnection();

    }

    public function  DBRecrord() : Record
    {
        return new MySQLRecord();
    }

    public function  DBQueryBuilder() : QueryBuilder
    {
        return new MySQLQueryBuilder();
    }
}


class PostgreSQLFactory extends AbstractFactory
{
    public function DBConection() : Connection
    {
        return new PostgreSQLConnection();

    }

    public function  DBRecrord() : Record
    {
        return new PostgreSQLRecord();
    }

    public function  DBQueryBuilder() : QueryBuilder
    {
        return new PostgreSQLQueryBuilder();
    }
}


class OracleFactory extends AbstractFactory
{
    public function DBConection() : Connection
    {
        return new OracleConnection();

    }

    public function  DBRecrord() : Record
    {
        return new OracleRecord();
    }

    public function  DBQueryBuilder() : QueryBuilder
    {
        return new OracleQueryBuilder();
    }
}

interface Connection {
    public function connect() : string;
}


class MySQLConnection implements Connection {
    public function connect() : string {
        return 'MySQL database connection was successful';
    }
}

class PostgreSQLConnection implements Connection {
    public function connect() : string {
        return 'PostgreSQL database connection was successful';
    }
}

class OracleConnection implements Connection {
    public function connect() : string {
        return 'Oracle database connection was successful';
    }
}



interface Record
{
    public function record() : string;
}


class MySQLRecord implements Record
{
    public function record() : string {
        return 'MySQL database recording was successful';
    }
}

class PostgreSQLRecord implements Record
{
    public function record() : string {
        return 'PostgreSQL database recording was successful';
    }
}

class OracleRecord implements Record
{
    public function record() : string {
        return 'Oracle database recording was successful';
    }
}



interface QueryBuilder
{
    public function query() : array;
}


class MySQLQueryBuilder implements QueryBuilder
{
    public function query() : array {
        return $MySQLResult;
    }
}

class PostgreSQLQueryBuilder implements QueryBuilder
{
    public function query() : array {
        return $PostgreSQLResult;
    }
}

class OracleQueryBuilder implements QueryBuilder
{
    public function query(): array
    {
        return $OracleResult;
    }
}

