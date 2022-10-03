<?php

class Index
{

    public function showAll(): array {
        $sql = "SELECT `id_task`, `name_task`, `description_task`, `date_add`,
                       `date_edit`, `name_status`, `name_importance`
                FROM `_tasks`
                INNER JOIN `_statuses`
                ON _tasks.status_task = _statuses.id_status
                INNER JOIN `_importance`
                ON _tasks.importance_task = _importance.id_importance";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    public function deleteOne(int $id): bool {
        $sql = "DELETE FROM `_tasks` WHERE `id_task` = :id";
        $query = dbQuery($sql, ['id' => $id]);
        return true;
    }

}
