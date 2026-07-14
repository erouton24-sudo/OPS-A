-- ==================================================== -- WILLOWAY OPS-A FOUNDATION INSTALLER -- Version 1.0
-- BEGINNER INSTALLATION GUIDE
-- STEP 1: Login to IONOS Control Panel -- STEP 2: Open phpMyAdmin -- STEP 3: Select your database -- STEP 4: Click IMPORT -- STEP 5: Select this file -- STEP 6: Click GO
-- If successful, you will see: -- "Import has been successfully finished"
-- ====================================================
SET FOREIGN_KEY_CHECKS = 0;
-- ==================================================== -- ACTORS TABLE -- ====================================================
CREATE TABLE IF NOT EXISTS opsa_actors ( actor_id VARCHAR(50) PRIMARY KEY, actor_name VARCHAR(100) NOT NULL, role_classification VARCHAR(50) NOT NULL, status VARCHAR(20) DEFAULT 'ACTIVE', created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ) ENGINE=InnoDB;
-- ==================================================== -- EVENTS TABLE -- ====================================================
CREATE TABLE IF NOT EXISTS opsa_events ( event_id VARCHAR(50) PRIMARY KEY, actor_id VARCHAR(50) NOT NULL, event_type VARCHAR(50) NOT NULL, event_description TEXT NOT NULL, continuity_impact DECIMAL(5,2) DEFAULT 0.00, recorded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, CONSTRAINT fk_actor FOREIGN KEY (actor_id) REFERENCES opsa_actors(actor_id) ON DELETE CASCADE ) ENGINE=InnoDB;
CREATE INDEX idx_events_actor ON opsa_events(actor_id);
-- ==================================================== -- TELEMETRY TABLE -- ====================================================
CREATE TABLE IF NOT EXISTS opsa_telemetry ( telemetry_id INT AUTO_INCREMENT PRIMARY KEY, system_state VARCHAR(50) NOT NULL, resilience_score DECIMAL(5,2) NOT NULL, drift_detected BOOLEAN DEFAULT FALSE, logged_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ) ENGINE=InnoDB;
-- ==================================================== -- LICENSE TABLE -- ====================================================
CREATE TABLE IF NOT EXISTS opsa_licenses ( license_key VARCHAR(100) PRIMARY KEY, client_name VARCHAR(100) NOT NULL, tier VARCHAR(50) NOT NULL, is_active BOOLEAN DEFAULT TRUE, expiration_date DATE NOT NULL ) ENGINE=InnoDB;
CREATE INDEX idx_license_status ON opsa_licenses(is_active, expiration_date);
-- ==================================================== -- SYSTEM HEALTH VIEW -- ====================================================
CREATE OR REPLACE VIEW opsa_system_health AS SELECT MAX(resilience_score) AS resilience_score, MAX(logged_at) AS last_update, SUM(CASE WHEN drift_detected = TRUE THEN 1 ELSE 0 END) AS active_drifts FROM opsa_telemetry;
-- ==================================================== -- INITIAL LICENSE -- ====================================================
INSERT IGNORE INTO opsa_licenses ( license_key, client_name, tier, is_active, expiration_date ) VALUES ( 'DEMO-ENTERPRISE-2026', 'Willoway Initial Pilot', 'Enterprise', TRUE, '2026-12-31' );
-- ==================================================== -- SAMPLE ACTOR -- ====================================================
INSERT IGNORE INTO opsa_actors ( actor_id, actor_name, role_classification, status ) VALUES ( 'ACT-001', 'Primary System', 'CORE', 'ACTIVE' );
SET FOREIGN_KEY_CHECKS = 1;
-- ==================================================== -- INSTALLATION COMPLETE -- ====================================================