<?php

class Overloading
{
    public function __call($name, $arguments)
    {
        if ($name = 'overloadedClassBatch') {
            switch ($arguments[0]) {
                case 'batch1':
                    echo '<br>Batch 1 <br><br> 1. Bryan <br> 2. Robby <br> 3. Michael <br> 4. Koji <br> . . .<br>';
                    return;
                case 'batch2':
                    echo '<br>Batch 2 <br><br> 1. Vincent <br> 2. Vanessa <br> 3. Jaymard <br> 4. Paco<br> . . .<br>';
                    return;
                default:
                    echo '<br>unannounced batch<br>';
                    return;
            }
        }
    }
}


$batch_iden = new Overloading();
$batch_iden->overloadedClassBatch('batch1');
$batch_iden->overloadedClassBatch('batch2');
$batch_iden->overloadedClassBatch('batch3');
