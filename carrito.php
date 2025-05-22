<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Luna");?>

<h2>Carrito de Compras</h2>
<form action="actualizar_carrito.php" method="POST">
<table border="1" cellpadding="10" style="width: 100%; max-width: 600px; margin: auto; border-collapse: collapse;">
  <tr style="background-color: #f2f2f2;">
    <th>Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Total</th>
    <th>Acción</th>
  </tr>
<?php
$total_carrito = 0;
$sql = "SELECT * FROM carrito";
$result = $conexion->query($sql);

while($row = $result->fetch_assoc()) {
    $total_producto = $row['precio'] * $row['cantidad'];
    $total_carrito += $total_producto;
    echo "<tr>
            <td>{$row['nombre']}</td>
            <td>\${$row['precio']}</td>
            <td>
              <input type='number' name='cantidades[{$row['id']}]' value='{$row['cantidad']}' min='1' style='width: 50px;'/>
            </td>
            <td>\${$total_producto}</td>
            <td>
              <a href='eliminar_producto.php?id={$row['id']}' style='color:red; text-decoration:none;'>Eliminar</a>
            </td>
          </tr>";
}
?>
<tr style="font-weight: bold;">
  <td colspan="3" style="text-align:right;">Total General</td>
  <td>$<?php echo number_format($total_carrito, 2); ?></td>
  <td></td>
</tr>
</table>
<div style="text-align:center; margin-top: 10px;">
  <button type="submit" style="padding: 8px 16px; cursor:pointer;">Actualizar Cantidades</button>
</div>
</form>

<div style="text-align:center; margin-top: 20px;">
  <a href="index.php" style="text-decoration:none; color:#333; font-weight:bold;">Volver al catálogo</a>
</div>
