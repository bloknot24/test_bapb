<?php

class Index
{

    public function showAll(): array
    {
        $sql = "SELECT `id_task`, `name_task`, `description_task`, `date_add`,
                `date_edit`, `name_status`, `name_importance`
                FROM `_tasks`
                INNER JOIN `_statuses`
                ON _tasks.status_task = _statuses.id_status
                INNER JOIN `_importance`
                ON _tasks.importance_task = _importance.id_importance ORDER BY `date_add` DESC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    public function deleteOne(int $id): bool
    {
        $sql = "DELETE FROM `_tasks` WHERE `id_task` = :id";
        dbQuery($sql, ['id' => $id]);
        return true;
    }

    public function todoAdd(array $data): bool
    {
        $sql = "INSERT INTO `_tasks` (name_task, description_task, importance_task, status_task)
                VALUES (:task, :description, :importance, :status)";
        dbQuery($sql, $data);
        return true;
    }

    public function updateOne(int $id)
    {
        $sql = "SELECT * FROM `_tasks` WHERE `id_task` = :id";
        $query = dbQuery($sql, ['id' => $id]);
        return $query->fetch();
    }

    public function todoEdit(array $data): bool
    {
        $date = date("Y-m-d H:i:s");
        $sql = "UPDATE `_tasks` SET `name_task` = :task, `description_task` = :description,
               `importance_task` = :importance, `status_task` = :status, `date_edit` = CURRENT_TIMESTAMP
               WHERE `id_task` = :id";
        $query = dbQuery($sql, $data);
        return true;
    }

    public function error(string $text)
    {
        $error = [
            "error" => $text
        ];
        echo json_encode($error);
    }

}
