<?php

/**
 * In class definitions everythink is based on design patterns.
 * The code below is a simple interface definition and it's usage with action, object
 * and control_point model that I've developped.
 * Each interfaces represent a group of actions.
 *
 * Now the comlexity will increase each time I want to do a change.
 *
 * For exemple : If I wanna create another method inside one of these three payment
 * objects. Sth like fraud check what happens is my control_point wont be able to
 * handle other classes because the integriry has broken.
 *
 * I can pay with a promotion code but I have to do a fraud check which is why I created
 * another interface to handle that action. But my control_point has one parameter /
 * variable type (interface type) now. What to do ?
 *
 * The solution at that point is to create another interface who's gonna allow me to
 * handle different actions in each of my objects.
 *
 * This last process interface will be implemented by all other class and will act as
 * a selector.
 *
 *
 * Inside process interface methods we define which actions will be executed for each
 * specificly defined object
 *
 * Every time I wanna add a new action I create and interface if it's absolutly
 * necessary and then implement the method inside corresponding object, that way the
 * contol_point remains intact.
 */


// $actions = ['standart','fraud','3d secure'];
interface StandardPaymentInterface{
   public function pay();
}
interface FraudCheckInterface{
   public function fraudCheck();
}
interface TriDsecureCheckInterface{
   public function triDsecureCheck();
}
interface ProcessInterface{
   public function process();
}

// $objects = ['card','cash','promotion'];
class PayWithCard implements StandardPaymentInterface , ProcessInterface , TriDsecureCheckInterface {
   public function pay(){
      echo "Pay with Card and ";
   }

   public function process()
   {
      $this->pay();
      $this->triDsecureCheck();
   }

   public function triDsecureCheck()
   {
      echo "Do TriD secure check";
   }
}
class PayWithCash implements StandardPaymentInterface , ProcessInterface{
   public function pay(){
      echo "Pay with Cash";
   }

   public function process()
   {
      $this->pay();
   }
}
class PayWithPromotion implements StandardPaymentInterface, FraudCheckInterface,ProcessInterface {
   public function pay(){
      echo "Pay with Promotion Code and ";
   }
   public function fraudCheck(){
      echo "Do fraud check";
   }

   public function process()
   {
      $this->pay();
      $this->fraudCheck();
   }
}

// $control_point = 'PayementControl';
class PayementControl{
   public function takePayment(ProcessInterface $process){
      $process->process();
   }
}


$paymentMethode = new PayWithCard();
$patymetMethod2 = new PayWithCash();
$patymetMethod3 = new PayWithPromotion();

$paymentControle = new PayementControl();
$paymentControle->takePayment($paymentMethode);
echo "<hr>";
$paymentControle->takePayment($patymetMethod2);
echo "<hr>";
$paymentControle->takePayment($patymetMethod3);
echo "<hr>";