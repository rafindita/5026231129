<?php
// Start session if needed
session_start();

// You can add PHP functionality here
// For example, database connection
// $conn = mysqli_connect("localhost", "username", "password", "database");

// Example function to get equipment data (in a real application, this would come from a database)
function getEquipmentRented() {
    // In a real app, you would fetch this from a database
    return [
        [
            "image" => "/materialC/Canon EOS 4000D.png",
            "name" => "SONY Cinema Line",
            "status" => "red",
            "message" => "Dipinjam, kembali pada 10/12/24"
        ],
        [
            "image" => "/materialC/Canon EOS 4000D.png",
            "name" => "SONY NP-FZ100",
            "status" => "red",
            "message" => "Dipinjam, kembali pada 18/12/24"
        ],
        [
            "image" => "/materialC/Canon EOS 4000D.png",
            "name" => "SONY FE 24-70mm F/2.8 GM",
            "status" => "red",
            "message" => "Dipinjam, kembali pada 10/12/24"
        ],
        [
            "image" => "/materialC/Sony Maximum.png",
            "name" => "Sony Maximum",
            "status" => "red",
            "message" => "Dipinjam, kembali pada 18/12/24"
        ]
    ];
}

function getEquipmentPending() {
    // In a real app, you would fetch this from a database
    return [
        [
            "image" => "/materialC/NIKON D7500.png",
            "name" => "Nikon D7500",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/Canon Lens EFS 18-135mm.png",
            "name" => "Canon Lens EFS 18-135mm",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/Sony PXW-Z90T XDCAM camcorder.png",
            "name" => "Sony PXW-Z90T XDCAM camcorder",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/Canon EOS 4000D.png",
            "name" => "Canon EOS 4000D",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/insta mini11.png",
            "name" => "Instax mini11",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/instax slim-go.png",
            "name" => "Instax slim-go",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/Canon EOS 80D.png",
            "name" => "Canon EOS 80D",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ],
        [
            "image" => "/materialC/Sony Zeiss.png",
            "name" => "Sony Zeiss",
            "status" => "green",
            "message" => "Diajukan pada 2/12/24"
        ]
    ];
}

// Get equipment data
$rentedEquipment = getEquipmentRented();
$pendingEquipment = getEquipmentPending();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage Teknisi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles_bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- statusbar -->
    <div class="status-bar">
        <span>9:41</span>
        <div class="status-icons">
            <span class="img-fluid">
                <img src="/materialC/icons8-signal-24.png" alt="Signal">
            </span>
            <span class="img-fluid">
                <img src="/materialC/icons8-wi-fi-24.png"alt="WiFi">
            </span>
            <span class="battery-icon">
                <img src="/materialC/icons8-full-battery-30.png" alt="Battery">
            </span>
        </div>
    </div>
    
    <!-- tempatlogo -->
    <div class="logo-container">
        <div class="logo">
            <img src="/materialC/Logo CekDong 1.png" alt="CekDong Logo">
        </div>
    </div>
    
    <!-- judul -->
    <div class="title-container">
        <h4><strong>HomePage Teknisi</strong></h4>
    </div>
    
    <!-- containeralatyangdisewa -->
    <div class="container px-2">
        <div class="section-title"><strong>ALAT YANG SEDANG DISEWA</strong></div>
        
        <div class="equipment-container">
            <?php foreach ($rentedEquipment as $equipment): ?>
            <div class="equipment-card">
                <img src="<?php echo htmlspecialchars($equipment['image']); ?>" alt="<?php echo htmlspecialchars($equipment['name']); ?>" class="equipment-image">
                <div class="equipment-name"><?php echo htmlspecialchars($equipment['name']); ?></div>
                <div class="status-indicator">
                    <div class="status-dot <?php echo $equipment['status']; ?>"></div>
                    <span><?php echo htmlspecialchars($equipment['message']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div style="display: flex; justify-content: center;">
            <button class="check-button" onclick="window.location.href='check_equipment.php'"><strong>Cek Alat</strong></button>
        </div>
        
        <!-- containerpersetujuan -->
        <div class="section-title">MENUNGGU PERSETUJUAN</div>
        
        <div class="equipment-container">
            <?php 
            // Display first 4 items
            $firstRow = array_slice($pendingEquipment, 0, 4);
            foreach ($firstRow as $equipment): 
            ?>
            <div class="equipment-card">
                <img src="<?php echo htmlspecialchars($equipment['image']); ?>" alt="<?php echo htmlspecialchars($equipment['name']); ?>" class="equipment-image">
                <div class="equipment-name"><?php echo htmlspecialchars($equipment['name']); ?></div>
                <div class="status-indicator">
                    <div class="status-dot <?php echo $equipment['status']; ?>"></div>
                    <span><?php echo htmlspecialchars($equipment['message']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="equipment-container mt-2">
            <?php 
            // Display remaining items
            $secondRow = array_slice($pendingEquipment, 4);
            foreach ($secondRow as $equipment): 
            ?>
            <div class="equipment-card">
                <img src="<?php echo htmlspecialchars($equipment['image']); ?>" alt="<?php echo htmlspecialchars($equipment['name']); ?>" class="equipment-image">
                <div class="equipment-name"><?php echo htmlspecialchars($equipment['name']); ?></div>
                <div class="status-indicator">
                    <div class="status-dot <?php echo $equipment['status']; ?>"></div>
                    <span><?php echo htmlspecialchars($equipment['message']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>