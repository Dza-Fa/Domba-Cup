CREATE DATABASE IF NOT EXISTS dombacu CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE dombacu;

-- Team registrations table
CREATE TABLE IF NOT EXISTS registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category VARCHAR(100) NOT NULL,
  team_name VARCHAR(255) NOT NULL,
  captain_name VARCHAR(255) NOT NULL,
  captain_phone VARCHAR(50) NOT NULL,
  captain_email VARCHAR(255) NOT NULL,
  players JSON NULL,
  payment_proof_path VARCHAR(500) NULL,
  total_price INT NOT NULL DEFAULT 0,
  status ENUM('pending', 'paid', 'cancelled') NOT NULL DEFAULT 'pending',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX idx_status (status),
  INDEX idx_created_at (created_at)
) ENGINE=InnoDB;

-- Ticket purchases table (includes payment proof upload path)
CREATE TABLE IF NOT EXISTS tickets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  match_id VARCHAR(100) NOT NULL,
  match_label VARCHAR(255) NOT NULL,
  buyer_name VARCHAR(255) NOT NULL,
  buyer_email VARCHAR(255) NOT NULL,
  buyer_phone VARCHAR(50) NOT NULL,
  quantity INT NOT NULL,
  unit_price INT NOT NULL,
  total_price INT NOT NULL,
  payment_method VARCHAR(100) NOT NULL,
  payment_proof_path VARCHAR(500) NULL,
  status ENUM('pending', 'paid', 'cancelled') NOT NULL DEFAULT 'pending',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX idx_status (status),
  INDEX idx_match (match_id),
  INDEX idx_created_at (created_at)
) ENGINE=InnoDB;

-- Contact form submissions
CREATE TABLE IF NOT EXISTS contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
