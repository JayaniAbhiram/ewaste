
<div class="footer">
			<div class="wthree-copyright">
			<p>© <?php echo date('Y');?> Electronic Waste System. All rights reserved.</p>
			</div>
		  </div>

		  <style>
			/* Footer Styling */
.footer {
    background: linear-gradient(135deg, #2c3e50, #34495e); /* Gradient background */
    color: #ecf0f1; /* Light text color for contrast */
    padding: 20px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
    animation: fadeIn 1s ease-out;
}

.footer p {
    margin: 0;
    font-size: 14px;
    letter-spacing: 1px;
    font-family: 'Roboto', sans-serif;
    position: relative;
    z-index: 1;
}

/* Animation Effect */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hover Effect */
.footer:hover {
    background: linear-gradient(135deg, #34495e, #2c3e50);
    box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.3);
}

/* Responsive Styling */
@media (max-width: 768px) {
    .footer p {
        font-size: 12px;
    }
}

			</style>