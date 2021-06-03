TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER trg_catalog_product_entity_text_after_insert AFTER INSERT ON catalog_product_entity_text FOR EACH ROW\nBEGIN\nINSERT IGNORE INTO `scconnector_google_feed_cl` (`entity_id`) VALUES (NEW.`entity_id`);\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER trg_catalog_product_entity_text_after_update AFTER UPDATE ON catalog_product_entity_text FOR EACH ROW\nBEGIN\nIF (NOT(NEW.`value_id` <=> OLD.`value_id`) OR NOT(NEW.`attribute_id` <=> OLD.`attribute_id`) OR NOT(NEW.`store_id` <=> OLD.`store_id`) OR NOT(NEW.`entity_id` <=> OLD.`entity_id`) OR NOT(NEW.`value` <=> OLD.`value`)) THEN INSERT IGNORE INTO `scconnector_google_feed_cl` (`entity_id`) VALUES (NEW.`entity_id`); END IF;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER trg_catalog_product_entity_text_after_delete AFTER DELETE ON catalog_product_entity_text FOR EACH ROW\nBEGIN\nINSERT IGNORE INTO `scconnector_google_feed_cl` (`entity_id`) VALUES (OLD.`entity_id`);\nEND'
sql_modes=0 0 0
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8' 'utf8' 'utf8'
connection_cl_names='utf8_general_ci' 'utf8_general_ci' 'utf8_general_ci'
db_cl_names='utf8_unicode_ci' 'utf8_unicode_ci' 'utf8_unicode_ci'
created=161871367969 161871367970 161871367971
