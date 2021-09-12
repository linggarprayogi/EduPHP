<?php
$name = NULL;
$name = "yogi";
echo $name;

if (is_null($name)) {
    echo "variable null";
} else {
    echo "variable not null";
}

// hapus variable
unset($name);

echo $name;

if (isset($name)) {
    echo "variable null";
} else {
    echo "variable not null";
}
