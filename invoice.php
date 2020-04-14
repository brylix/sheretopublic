<?php

    $invoice_sql = "SELECT p.img AS img,p.id AS id,p.name AS name,oi.price AS price, oi.quantity AS quantity,c.name AS compName, sh.name AS shpName FROM products p,shopHasProducts shp,order_items oi,order_master om,companies c,shops sh WHERE p.id=shp.proId AND shp.id=oi.item_id AND sh.id=shp.shopId AND sh.compId=c.id AND oi.order_id=om.order_id AND om.tr_id=$trid;";