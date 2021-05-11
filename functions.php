<?php $product_attr = get_post_meta( get_the_ID(), '_product_attributes' ); ?>
<table>
 <tbody>
      <?php 
          foreach ($product_attr as $attr) {
              foreach ($attr as $attribute) { ?>
                <tr>
                   <th><?php $attrnames = str_replace("pa_", "", $attribute['name']);
                              echo str_replace("-", " ", $attrnames);
                     ?></th>
                    <td><?php $attrvalue = array( wc_get_product_terms( get_the_ID(), $attribute['name'], array( 'fields' => 'names' ) ) );
                        $attrvalues = implode(",", $attrvalue[0]);
                        echo $attrvalues;
                     ?></td>
                </tr>
      <?php } } ?>
 </tbody>
</table>
