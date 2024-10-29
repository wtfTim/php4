<?php
class Cookie {
    private $type;

    private $availableTypes = ['шоколадное', 'овсяное', 'пряники', 'сахарное'];

    public function setType($type) {
        if (in_array($type, $this->availableTypes)) {
            $this->type = $type;
        } else {
            echo "Тип печенья '$type' недоступен.\n <br>" ;
        }
    }

    public function getType() {
        return $this->type ? $this->type : "Тип печенья не установлен.";
    }
}

$cookie = new Cookie();

$cookie->setType('шоколадное');
echo "Тип печенья: " . $cookie->getType() . "<br>";

$cookie->setType('пряники');
echo "Тип печенья: " . $cookie->getType() . "<br>";

$cookie->setType('ванильное');
echo "После попытки установить тип: " . $cookie->getType() . "<br>";
?>
