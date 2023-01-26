USE AdventureWorksLT2012;

--- 1. Seleccionar los clientes que tengan dirección.
SELECT CustomerID FROM SalesLT.CustomerAddress;

--- 2. Seleccionar los clientes que tengan facturas.
SELECT CustomerID FROM SalesLT.Customer;

--- 3. Seleccionar los clientes cuyas ventas sean mayores a 3000.SELECT CustomerID, SubTotal FROM SalesLT.SalesOrderHeader WHERE SubTotal > 3000;--- 4. Seleccionar los clientes cuyo primer nombre empiece por la letra A o J.SELECT CustomerID, FirstName FROM SalesLT.Customer WHERE (FirstName LIKE 'A%' OR FirstName LIKE 'J%');--- 5. Seleccionar la cantidad de productos por categoría.SELECT ProductCategoryID FROM SalesLT.Product;--- 6. Seleccionar las direcciones (SalesLT.Address) cuyo tipo (AddressType) es Shipping. El resultado debe ser ordenado por StateProvince en orden alfabético.SELECT AddressLine1, AddressLine2, AddressType FROM SalesLT.Address, SalesLT.CustomerAddress WHERE AddressType = 'Shipping' ORDER BY AddressType;--- 7. Seleccionar todas las facturas cuya cantidad de ítems sea mayor o igual que 5.SELECT SalesOrderDetailID, OrderQty FROM SalesLT.SalesOrderDetail WHERE OrderQty >= 5;