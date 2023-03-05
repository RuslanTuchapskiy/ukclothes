<div class="checkout-section cart-section">
  <div class="title section-title"><?php echo $j3->settings->get('sectionTitleShoppingCart'); ?></div>
  <div class="section-body">
    <div class="alert alert-danger" v-if="stock_warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
        <tr>
          <td class="text-center td-image"><?php echo $column_image; ?></td>
          <td class="text-left td-product"><?php echo $column_name; ?></td>
          <td class="text-center td-model"><?php echo $column_model; ?></td>
          <td class="text-center td-qty"><?php echo $column_quantity; ?></td>
          <td class="text-right td-price"><?php echo $column_price; ?></td>
          <td class="text-right td-total"><?php echo $column_total; ?></td>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(product, index) in products">
          <td class="text-center td-image">
            <a :href="product.href">
              <img :src="product.thumb" :srcset="srcSet(product.thumb, product.thumb2x)" :alt="product.name" :title="product.name" class="img-thumbnail"/>
            </a>
          </td>
          <td class="text-left td-product">
            <a :href="product.href" v-html="product.name"></a>
            <span v-if="!product.stock" class="text-danger">***</span>
            <template v-for="option in product.option">
              <br/>
              <small v-html="option.name + ': ' + option.value"></small>
            </template>
            <br v-if="product.reward"/>
            <small v-if="product.reward" v-html="product.reward "></small>
            <br v-if="product.recurring"/>
            <span v-if="product.recurring" class="label label-info"><?php echo $text_recurring_item; ?></span>
            <small v-if="product.recurring" v-html="product.recurring"></small>
          </td>
          <td class="text-left td-model" v-html="product.model"></td>
          <td class="text-left td-qty">
            <div class="input-group btn-block" style="max-width: 200px;">
              <div class="stepper">
                <input type="text" v-model="product.quantity" v-on:change="updateCartItemQuantityValue(index, $event.target.value)" class="form-control"/>
                <span>
                      <i class="fa fa-angle-up" v-on:click="updateCartItemQuantity(index, 1)"></i>
                      <i class="fa fa-angle-down" v-on:click="updateCartItemQuantity(index, -1)"></i>
                    </span>
              </div>
              <span class="input-group-btn">
                    <button type="button" v-on:click="updateCartItem(product)" data-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                    <button type="button" v-on:click="deleteCartItem(product)" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
                  </span>
            </div>
          </td>
          <td class="text-right td-price" v-html="product.price"></td>
          <td class="text-right td-total" v-html="product.total"></td>
        </tr>
        </tbody>
      </table>
    </div>
      <table class="table table-bordered">
        <tfoot v-if="totals.length">
        <tr v-for="total in totals">
          <td colspan="7" class="text-right"><strong v-html="total.title + ':'"></strong></td>
          <td class="text-right" v-html="total.text"></td>
        </tr>
        </tfoot>
      </table>
  </div>
</div>
