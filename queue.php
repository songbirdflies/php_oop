<?php

class Node
{
 public $next;
 public $value;

 public function __construct($val)
 {
  $this->value = $val;
  $this->next = null;
 }
}

class Queue
{
 private $front; // the front of our Queue
 private $rear; // the rear of our Queue
 public $maxSize; // how many elements can be in our queue
 
 public function __construct($val)
 {
  $this->front = null;
  $this->rear = null;
  $this->maxSize = $val;
 }

 public function enqueue($val) // it will add an element to the end of the Queue
 {
 $new_node = new Node($val);
  $current_node = $this->front;

    if($current_node == null)
    {
      $this->front = $new_node;
    }
    else
    {
      while($current_node->next != null)
      {
        $current_node = $current_node->next;
      }
      $current_node->next = $new_node;
      //var_dump($current_node);
    }
 }

 public function dequeue() // it will remove an element from the front of the Queue
 {
 	$current_node = $this->front;
 	
	 	if($current_node != null)
	 	{
	 		$current_node = $current_node->next;
	 		$this->front = $current_node; 		
	 	}
	 	echo "The front node has been dequeued. <br/>";
	 	
 }
 
/* //=================== adding a new value to the fornt ======================

public function front($val) // returns the element in the front of your Queue
 {
 	$new_node = new Node($val);
  	$current_node = $this->front;

    if($current_node == null)
    {
      $this->front = $new_node;
    }
    else
      {
        $new_node->next = $current_node;
        $this->front = $new_node;
      }
 }*/

public function front()
{
	$current_node = $this->front;

    echo "The front node is " . $current_node->value . ".<br />";
}

 public function rear() // returns the element in the rear of your Queue
 {
/*      //THIS SORT OF WORKS
   $new_node = new Node($val);
  	$current_node = $this->front;


    while($current_node != null)
    {
       if($current_node->next == null)
	      {
	      $current_node->next = $new_node;
	      $new_node = $this->rear;
	      }
	      $current_node = $current_node->next;
    }
    */
   $current_node = $this->front;

   while(isset($current_node))
	{
		if($current_node->next == null)
			//var_dump($current_node);
    echo "The rear node is " . $current_node->value . ".<br />";
   $current_node = $current_node->next;
   }
   
    // function is not working
    
 }
 
 public function isEmpty() // returns true if the Queue is empty
 {
 	$current_node = $this->front;

  if($current_node != null) 
  {
    echo "Queue is empty. <br/>";
    return false;
  }
  else
  {
    echo "Queue is not empty. <br/>";
    return true;
  }

 }
 
 public function isFull() // returns true if the Queue is full
 {
 	//$maxSize = new Queue(value);
 	$current_node = $this->front;

 }

  public function display()
 {
  //echo all values in the linked list
  $current_node = $this->front;

  if($current_node == null) 
  {
    echo "No linked list to display.";
    return null;
  }
  while($current_node->next != null)
  {
    echo "Node value is " . $current_node->value . "<br>";
    $current_node = $current_node->next;
  }
  echo "Node value is " . $current_node->value . "<br>";

 }
}


$q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
$q->isEmpty(); // returns true
$q->enqueue(100); // Queue: 100
 // I moved the rear node to the rear. (returns 100)
$q->front(); // returns 100
$q->enqueue(20); // Queue: 100, 20
$q->enqueue(2); // Queue: 100, 20, 2
$q->dequeue(); // Queue: 20, 2
$q->enqueue(500); // Queue: 20, 2, 500
$q->enqueue(12); // Queue: 20, 2, 500, 12
$q->enqueue(30); // Queue: 20, 2, 500, 12, 30
$q->enqueue(100); // Queue: 20, 2, 500, 12, 30
$q->rear();
$q->isFull(); // returns true
$q->display();
?>