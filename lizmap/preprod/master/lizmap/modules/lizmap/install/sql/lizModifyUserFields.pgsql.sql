
ALTER TABLE jlx_user ALTER COLUMN organization DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN phonenumber DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN street DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN postcode DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN city DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN country DROP NOT NULL;
ALTER TABLE jlx_user ALTER COLUMN "comment" DROP NOT NULL;
