<?php

$cards = [
    ['suit' => 'spades', 'card' => '2', 'value' => 2],
    ['suit' => 'spades', 'card' => '3', 'value' => 3],
    ['suit' => 'spades', 'card' => '4', 'value' => 4],
    ['suit' => 'spades', 'card' => '5', 'value' => 5],
    ['suit' => 'spades', 'card' => '6', 'value' => 6],
    ['suit' => 'spades', 'card' => '7', 'value' => 7],
    ['suit' => 'spades', 'card' => '8', 'value' => 8],
    ['suit' => 'spades', 'card' => '9', 'value' => 9],
    ['suit' => 'spades', 'card' => '10', 'value' => 10],
    ['suit' => 'spades', 'card' => 'J', 'value' => 10],
    ['suit' => 'spades', 'card' => 'Q', 'value' => 10],
    ['suit' => 'spades', 'card' => 'K', 'value' => 10],
    ['suit' => 'spades', 'card' => 'A', 'value' => 11],
    ['suit' => 'clubs', 'card' => '2', 'value' => 2],
    ['suit' => 'clubs', 'card' => '3', 'value' => 3],
    ['suit' => 'clubs', 'card' => '4', 'value' => 4],
    ['suit' => 'clubs', 'card' => '5', 'value' => 5],
    ['suit' => 'clubs', 'card' => '6', 'value' => 6],
    ['suit' => 'clubs', 'card' => '7', 'value' => 7],
    ['suit' => 'clubs', 'card' => '8', 'value' => 8],
    ['suit' => 'clubs', 'card' => '9', 'value' => 9],
    ['suit' => 'clubs', 'card' => '10', 'value' => 10],
    ['suit' => 'clubs', 'card' => 'J', 'value' => 10],
    ['suit' => 'clubs', 'card' => 'Q', 'value' => 10],
    ['suit' => 'clubs', 'card' => 'K', 'value' => 10],
    ['suit' => 'clubs', 'card' => 'A', 'value' => 11],
    ['suit' => 'hearts', 'card' => '2', 'value' => 2],
    ['suit' => 'hearts', 'card' => '3', 'value' => 3],
    ['suit' => 'hearts', 'card' => '4', 'value' => 4],
    ['suit' => 'hearts', 'card' => '5', 'value' => 5],
    ['suit' => 'hearts', 'card' => '6', 'value' => 6],
    ['suit' => 'hearts', 'card' => '7', 'value' => 7],
    ['suit' => 'hearts', 'card' => '8', 'value' => 8],
    ['suit' => 'hearts', 'card' => '9', 'value' => 9],
    ['suit' => 'hearts', 'card' => '10', 'value' => 10],
    ['suit' => 'hearts', 'card' => 'J', 'value' => 10],
    ['suit' => 'hearts', 'card' => 'Q', 'value' => 10],
    ['suit' => 'hearts', 'card' => 'K', 'value' => 10],
    ['suit' => 'hearts', 'card' => 'A', 'value' => 11],
    ['suit' => 'diamonds', 'card' => '2', 'value' => 2],
    ['suit' => 'diamonds', 'card' => '3', 'value' => 3],
    ['suit' => 'diamonds', 'card' => '4', 'value' => 4],
    ['suit' => 'diamonds', 'card' => '5', 'value' => 5],
    ['suit' => 'diamonds', 'card' => '6', 'value' => 6],
    ['suit' => 'diamonds', 'card' => '7', 'value' => 7],
    ['suit' => 'diamonds', 'card' => '8', 'value' => 8],
    ['suit' => 'diamonds', 'card' => '9', 'value' => 9],
    ['suit' => 'diamonds', 'card' => '10', 'value' => 10],
    ['suit' => 'diamonds', 'card' => 'J', 'value' => 10],
    ['suit' => 'diamonds', 'card' => 'Q', 'value' => 10],
    ['suit' => 'diamonds', 'card' => 'K', 'value' => 10],
    ['suit' => 'diamonds', 'card' => 'A', 'value' => 11]
];
/*
 * @param Create a Blackjack Card Game for 2 players
 * @return numbers for the cards and a winner
 */

function calculateScore(array $player): int
{
    return $player[0]['value'] + $player[1]['value'];
}

shuffle($cards);

$player1 = array_splice($cards, 0, 2);

$player2 = array_splice($cards, 0, 2);

$player1Score = calculateScore($player1);
$player2Score = calculateScore($player2);

function finalScore($player1Score, $player2Score)
{
    if ($player1Score > $player2Score) {
        echo 'Player 1 wins!!!' . '<br />';
    } elseif ($player2Score > $player2Score) {
        echo 'Player 2 wins!!!' . '<br />';
    } else {
        echo 'Tie - Refresh to play again' . '<br />';
    }
}

finalScore($player1Score, $player2Score);
echo '<br />' . 'Player 1:';
echo '<br />' .'Score in total' . '<br />' . $player1Score;
echo '<br />' . 'Cards Drawn:';
echo '<br />' . $player1[0]['suit'];
echo '<br />' . $player1[0]['card'];
echo '<br />' . $player1[1]['suit'];
echo '<br />' . $player1[1]['card'];
echo '<br />';
echo '<br />' . 'Player 2:';
echo '<br />' .'Score in total' . '<br />' . $player2Score;
echo '<br />' . 'Cards Drawn:';
echo '<br />' . $player2[0]['suit'];
echo '<br />' . $player2[0]['card'];
echo '<br />' . $player2[1]['suit'];
echo '<br />' . $player2[1]['card'];
