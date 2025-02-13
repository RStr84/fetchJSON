<?php

class JsonSender
{
    public string $name;

    public function getNameInJsonFormat(): string {
        return json_encode($this->name);
    }

}

$n = new JsonSender();
$n->name = "Beck";

echo json_encode($n);
//echo $n->getNameInJsonFormat();