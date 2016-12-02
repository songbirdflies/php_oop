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
  $this->head = null;
 }
 public function add($val)
 {
  //return true if added correctly
  $new_node = new Node($val);
  $current_node = $this->head;

    if($current_node == null)
    {
      $this->head = $new_node;
    }
    else
    {
      while($current_node->next != null)
      {
        $current_node = $current_node->next;
      }
      $current_node->next = $new_node;
    }
 }
 public function remove($val)
 {
  //return true if correctly removed
  //return false if value was never found
  // TO DELETE: find value, have the pointer skip that value and move to the next value

  $current_node = $this->head;

   while($current_node->next->value != $val)
   {
    if($current_node->next->next == null)
    {
      echo "Cannot find value: " . $val . ".<br />";
      return null;
    }
      else 
      {
        $current_node = $current_node->next;
      }
   } 
     $current_node->next = $current_node->next->next;
     return true;


 }
 public function insert($valueAfter, $newValue)
 {
  //return true if successfully inserted after the valueAfter
  //if value is never found add the new value to the end of the linked list
 
  $found_node = $this->find($valueAfter);
  $new_node = new Node($newValue);


  $new_node->next = $found_node->next;
  $found_node->next = $new_node



  
/* if($current_node != null) // if list is not null
    {

      while(isset($current_node->next)) // while there is a next pointer
        {
           
         if($current_node->value == $valueAfter)//($current_node->next != null)
          { 
            $new_node->next = $current_node->next; //newnode->next links to current->next
            $current_node->next = $new_node; //current node links to new node, new node inserted
          }
           $current_node = $current_node->next; //*not sure why this works
        } //close while loop

        if($current_node->next == null) // if we're at the end of the link
        {     
           if($current_node->value == $valueAfter)// and the value is there
            { 
              $current_node->next = $new_node; //new node inserted at the end of the list
              return true;
            }
          } 

    } // close first if statement

  if($current_node == null) // if linked list is null
    {
    $this->head = $new_node; //make the new node the first one
    }   */

//-------- If $valueAfter does not exist ---------------------------------


/*  while(isset($current_node)) // if current node is not null
  {
     if($current_node->value != $valueAfter) // if current node does not equal to value
     { // should be if cannot find $valueAfter
        if($current_node->next == null) // iff current node next is null
        {
          echo "Cannot find value: " . $valueAfter . ".<br />";
          $current_node->next = $new_node;
          return null;
        }
      } 
      $current_node = $current_node->next;
  }  */
//--------------------------------------------------------------------------

}
  

 public function display()
 {
  //echo all values in the linked list
  $current_node = $this->head;

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
 public function find($val)
 {
  //return node if value is found - GET
  //return false if not found
 
 $current_node =  $this->head;

 while($current_node->value != $val)
 {
  if($current_node->next == null)
  {
    echo "Cannot find value: " . $val . ".<br />";
    return null;
  }
    else 
    {
      $current_node = $current_node->next;
    }
 } 
  return $current_node;
  //echo "The found value is " . $val . ". <br/>";
 }

 public function isEmpty()
 {
  //return true if the linked list is empty
  //return false if linked list has 
  $current_node = $this->head;

  if($current_node == null) 
  {
    echo "Linked List is empty. <br/>";
    return false;
  }
  else
  {
    echo "Linked List is not empty. <br/>";
    return true;
  }

 }
} //end class SinglyLinkedList

$sll = new SinglyLinkedList;
$sll->add(10);
$sll->add(15);
$sll->add(20);
$sll->add(30);
$sll->isEmpty();
//var_dump($sll->find(15));
//$sll->remove(20);
$sll->insert(15, 100);
$sll->display();

?>

