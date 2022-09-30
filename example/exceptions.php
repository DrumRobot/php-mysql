<?php
class MyException extends Exception {}
class MyOtherException extends Exception { }

class Test {
    public function testing() {
        try {
            throw new MyException('foo!');
        } catch (MyException | MyOtherException $e) {
            var_dump(get_class($e));
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();
?>