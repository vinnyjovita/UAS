CREATE VIEW LaporanRataRataJumlahSnackDibeli AS
select `form_products`.`Nama` AS `ProductName`,`form_products`.`Kategori` AS `Kategori`,AVG(`formtransaction_details`.`Qty`) AS `Qty`
from `form_transactions`
join `formtransaction_details` on`form_transactions`.`id` = `formtransaction_details`.`Transactionnumber`
join `form_products` on`formtransaction_details`.`Productid` = `form_products`.`id`
group by ProductName, Kategori
