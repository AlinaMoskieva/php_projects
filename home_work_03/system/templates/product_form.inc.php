<div class="product">
  <div class="product-image"></div>
  <div class="product-form">
    <h2 class="product-title">Product Form</h2>
    <form action="" method="POST">
      <label for="product-amount">Please, enter the quantity</label>
      <input type="text" name="amount" id="product-amount" autofocus="true" required="true"><br>
      <ul>
        <li>
          <input type="radio" value="color--first" name="color" id="radio1"/>
          <label for="radio1"><span class="product-color color--first"></span></label>
        </li>
        <li>
          <input type="radio" value="color--second" name="color"  id="radio2"/>
          <label for="radio2"><span class="product-color color--second"></span></label>
        </li>
        <li>
          <input type="radio" value="color--third" name="color"  id="radio3"/>
          <label for="radio3"><span class="product-color color--third"></span></label>
        </li>
      </ul>
      <input type="submit" value="Order">
    </form>
  </div>
</div>
