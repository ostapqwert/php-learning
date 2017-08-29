<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }

    public function insert($table, $pararms)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($pararms)),
            ':'. implode(', : ', array_keys($pararms))
        );

        try{
        $statement = $this->pdo->prepare($sql);
        $statement->execute($pararms);
        } catch (Exception $e){
            return $e->getMessage();
        }

    }

}