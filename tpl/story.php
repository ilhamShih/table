
            
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                         
				<tr>
				    
                  <td bgcolor="#D2C7BA" width="50%" style="padding: 12px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                      <strong>Клиент </strong>
                  </td>
                  
                  <td  bgcolor="#D2C7BA" width="50%" style="padding: 12px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                      <strong>Кол-во</strong>
                  </td>
                  
                </tr>
                 
                 
                <?php foreach($content as $row) :?>
                    
                <tr>
                  <td width="50%" style="padding: 6px 12px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                  <?php echo $row['name_client']?>
                  </td>
                  <td width="50%" style="padding: 6px 12px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                  <?php echo $row['product_count']?>
                  </td>
                </tr>
                    
                 <?php endforeach ?>
               
               </tbody>
              </table>
            </td>
     </table>	
 
 
 
