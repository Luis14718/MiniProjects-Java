<?php

// turing machine
// binary increment algorithm based on Tom Stuart's "Understanding Computation"

$states = [1, 2, 3];
$accept_states = [3];

// quintuple
// state, read condition, write value, move direction, new state
$rules = [
    1 => ['0' => ['1', 'r', 2],
          '_' => ['1', 'r', 2],
          '1' => ['0', 'l', 1]],
    2 => ['0' => ['0', 'r', 2],
          '1' => ['1', 'r', 2],
          '_' => ['_', 'l', 3]],
];

// binary 11
$tape = ['1', '0', '1', '1'];

$position = 3;
$state = 1;

class NoTransitionException extends RuntimeException {}

while (!in_array($state, $accept_states)) {
    $read_val = isset($tape[$position]) ? $tape[$position] : '_';

    if (!isset($rules[$state][$read_val])) {
        throw new NoTransitionException();
    }

    list($write_val, $move_dir, $new_state) = $rules[$state][$read_val];

    $tape[$position] = $write_val;

    if ('l' === $move_dir) {
        $position--;
        if ($position < 0) {
            $position++;
            array_unshift($tape, '_');
        }
    } else if ('r' === $move_dir) {
        $position++;
        if ($position >= count($tape)) {
            array_push($tape, '_');
        }
    }

    $state = $new_state;
}

$render_cell = function ($cell, $cell_pos) use ($position) {
    return ($position === $cell_pos) ? "($cell)" : $cell;
};

echo sprintf("Tape: %s\n",
    trim(
        implode('',
            array_map($render_cell, $tape, range(0, count($tape)-1))),
        '_'));
echo sprintf("Position: %s\n", $position);
echo sprintf("State: %s\n", $state);
?>