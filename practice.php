<?php 
Class Node 
{
  public function __construct($val)
  {
    $this->value = $val;
    $this->next = null;
  }
}

Class SinglyLinkedList 
{
  public function __construct()
  {
    //the assignment says that we need a tail attribute but that is a typo. Let's just have the head attribute
    $this->head = null;
  }

  public function add($val)
  {
    // we are setting the variable $new_node to a node with whatever value we pass through the add function
    $new_node = new Node($val);
    $current_node = $this->head; // set $current_node to be the head node

    // when we call the add function, we want to check if the head is already set.
    // If the head is null that means that we are adding the very first node into our LinkedList
    if($current_node == null)
    {
      $this->head = $new_node;
    }
    else
    {
      while($current_node->next != null) //by using this while loop, we are able to traverse throught thelist
      {
        $current_node = $current_node->next; //we are setting the current_node to the next pointer until we reach the end of the list
      }
      $current_node->next = $new_node; //since we are out of the while loop, it means that we have reached the very last node. so we set the last node next to point to the new node that we are trying to add
    }
  }

  public function display()
  {
    $current_node = $this->head;
    if($current_node == null)
    {
      echo "Linked List is empty";
      return null;
    }
    while($current_node->next != null)
    {
      echo "Node values is " . $current_node->value . "<br>";
      $current_node = $current_node->next; // have $current_node point to wher e $curret_node->next is pointing to
    }
    echo "Node values is " . $current_node->value . "<br>"; // have to print the last node
  }
}

$sll = new SinglyLinkedList;
$sll->add(10);
$sll->add(15);
$sll->add(20);
$sll->display();


// let me know if you have any questions! I hope that this was helpful
?>