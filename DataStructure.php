<?php
class ReadingStackList extends SplStack
{
	//FILO
	//push để đẩy 1 giá trị vào stack
	//pop để lấy ra kết quả và xóa khỏi stack
	//top để xêm kết quả mà ko xóa khỏi stack
}

$myBooks = new ReadingStackList();

$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords'); 
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');
echo '<b>stack</b><br>';
foreach ($myBooks as $book) {
    echo $book . "<br>"; // prints last item first!
}
echo'<hr>';
echo '<b>pop()</b> '.$myBooks->pop().'<br>';
echo'<hr>';
echo '<b>stack after pop</b><br>';
foreach ($myBooks as $book) {
    echo $book . "<br>"; // prints last item first!
}
echo'<hr>';
//--------------------------------------------------------------------------------------------//
class ReadingQueueList extends SplQueue
{
	//FIFO
	//enqueue để đưa 1 giá trị vào queue
	//dequeue để lấy ra kết quả và xóa khỏi queue
	//bottom để xem kết quả mà không xóa khỏi queue
}

$myBooks2 = new ReadingQueueList();

// add some items to the queue
$myBooks2->enqueue('A Dance with Dragons');
$myBooks2->enqueue('A Feast for Crows');
$myBooks2->enqueue('A Storm of Swords'); 
$myBooks2->enqueue('A Clash of Kings');
$myBooks2->enqueue('A Game of Thrones');
echo '<b>queue</b><br>';
foreach ($myBooks2 as $book) {
    echo $book . "<br>"; // prints last item first!
}
echo'<hr>';
echo '<b>dequeue()</b> '.$myBooks2->dequeue().'<br>';
echo'<hr>';
echo '<b>stack after dequeue</b><br>';
foreach ($myBooks2 as $book) {
    echo $book . "<br>"; // prints last item first!
}
?>