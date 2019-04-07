#Note: use decimal(10,2) for area and circumference on circle app.
DELIMITER // 

CREATE PROCEDURE sp_insertcircle
(IN circumference decimal(10,2)
, IN area decimal(10,2)
)

BEGIN

INSERT INTO wk3circle (
circumference
, area)

VALUES (
circumference
, area);

END