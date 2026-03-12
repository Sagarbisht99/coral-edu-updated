<div class="early-bird-timer" id="earlyBirdTimer">
    <div class="timer-content">
        <div class="timer-icon">
            <i class="fas fa-bell"></i>
        </div>
        <div class="timer-text">
            <span class="timer-title">Apply Before 30 June – Limited Seats Available</span>
        </div>
        <div class="timer-countdown" id="countdown">
            <span class="countdown-value" id="days">3d</span>
            <span class="countdown-value" id="hours">20h</span>
            <span class="countdown-value" id="minutes">48m</span>
            <span class="countdown-value" id="seconds">39s</span>
        </div>
        <button class="timer-toggle-btn" id="timerToggle">
            <i class="fas fa-times" id="toggleIcon"></i>
        </button>
    </div>
</div>

<style>
    :root {
        --primary-orange: #ff7a00;
        --secondary-orange: #ff9500;
        --light-orange: #ffb347;
        --primary-blue: #4A90E2;
        --secondary-cyan: #00D4FF;
        --bg-deep: #12141D;
        --surface-card: #1E212B;
        --text-main: #F8FAFC;
        --text-muted: #94A3B8;
        --white: #ffffff;
    }

    .early-bird-timer {
        background: linear-gradient(135deg, var(--primary-orange) 0%, var(--secondary-orange) 50%, var(--light-orange) 100%);
        color: var(--white);
        padding: 15px 0;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        transform-origin: top;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        border-radius: 0;
        box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
    }

    /* Use display: none for true removal */
    .early-bird-timer.hidden {
        display: none;
    }

    .timer-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .timer-countdown {
        display: flex;
        gap: 8px;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .timer-text {
        flex: 1;
        text-align: center;
        min-width: 200px;
    }

    .timer-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--white);
        display: block;
        line-height: 1.3;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .timer-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.25);
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        flex-shrink: 0;
    }

    .timer-icon i {
        color: var(--white);
        font-size: 18px;
    }

    .countdown-value {
        background: rgba(255, 255, 255, 0.25);
        color: var(--white);
        padding: 8px 12px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 700;
        min-width: 50px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .countdown-value:hover {
        background: rgba(255, 255, 255, 0.35);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .timer-toggle-btn {
        position: absolute;
        top: 10px;
        right: 20px;
        background: rgba(255, 255, 255, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: var(--white);
        cursor: pointer;
        padding: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
        z-index: 10;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        backdrop-filter: blur(10px);
        flex-shrink: 0;
    }

    .timer-toggle-btn:hover {
        background: rgba(255, 255, 255, 0.35);
        color: var(--white);
        transform: scale(1.1);
        border-color: rgba(255, 255, 255, 0.4);
    }

    /* Floating Notification Icon */
    .timer-notification-icon {
        position: fixed;
        bottom: 20px;
        left: 20px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-orange) 0%, var(--secondary-orange) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 25px rgba(255, 122, 0, 0.4);
        z-index: 1000;
        color: var(--white);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .timer-notification-icon:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 30px rgba(255, 122, 0, 0.6);
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .timer-content { 
            flex-direction: column; 
            text-align: center; 
            gap: 15px;
            padding: 0 20px;
        }
        .timer-text {
            flex: none;
            min-width: auto;
            order: -1;
        }
        .timer-countdown {
            gap: 6px;
            justify-content: center;
            width: 100%;
        }
        .timer-icon {
            width: 35px;
            height: 35px;
            order: -2;
        }
        .timer-icon i {
            font-size: 16px;
        }
        .timer-title {
            font-size: 14px;
        }
        .countdown-value {
            padding: 6px 10px;
            font-size: 13px;
            min-width: 45px;
        }
        .timer-toggle-btn {
            top: 8px;
            right: 15px;
            width: 28px;
            padding: 6px;
        }
    }

    @media (max-width: 640px) {
        .early-bird-timer {
            padding: 12px 0;
        }
        .timer-content {
            padding: 0 18px;
            gap: 12px;
        }
        .timer-icon {
            width: 32px;
            height: 32px;
        }
        .timer-icon i {
            font-size: 14px;
        }
        .timer-title {
            font-size: 13px;
        }
        .timer-countdown {
            gap: 5px;
        }
        .countdown-value {
            padding: 5px 8px;
            font-size: 12px;
            min-width: 40px;
        }
        .timer-toggle-btn {
            width: 26px;
            height: 26px;
            font-size: 14px;
            top: 6px;
            right: 12px;
        }
    }

    @media (max-width: 576px) {
        .early-bird-timer {
            padding: 10px 0;
        }
        .timer-content {
            padding: 0 15px;
            gap: 10px;
        }
        .timer-icon {
            width: 30px;
            height: 30px;
        }
        .timer-icon i {
            font-size: 13px;
        }
        .timer-title {
            font-size: 12px;
            line-height: 1.2;
        }
        .timer-countdown {
            gap: 4px;
        }
        .countdown-value {
            padding: 4px 6px;
            font-size: 11px;
            min-width: 35px;
        }
        .timer-toggle-btn {
            width: 24px;
            height: 24px;
            font-size: 12px;
            top: 5px;
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .early-bird-timer {
            padding: 8px 0;
        }
        .timer-content {
            padding: 0 12px;
            gap: 8px;
        }
        .timer-icon {
            width: 28px;
            height: 28px;
        }
        .timer-icon i {
            font-size: 12px;
        }
        .timer-title {
            font-size: 11px;
        }
        .timer-countdown {
            gap: 3px;
        }
        .countdown-value {
            padding: 3px 5px;
            font-size: 10px;
            min-width: 30px;
        }
        .timer-toggle-btn {
            width: 22px;
            height: 22px;
            font-size: 11px;
            top: 4px;
            right: 8px;
        }
        .timer-notification-icon {
            width: 50px;
            height: 50px;
            bottom: 15px;
            left: 15px;
        }
    }

    @media (max-width: 360px) {
        .early-bird-timer {
            padding: 6px 0;
        }
        .timer-content {
            padding: 0 10px;
            gap: 6px;
        }
        .timer-icon {
            width: 26px;
            height: 26px;
        }
        .timer-icon i {
            font-size: 11px;
        }
        .timer-title {
            font-size: 10px;
        }
        .timer-countdown {
            gap: 2px;
        }
        .countdown-value {
            padding: 2px 4px;
            font-size: 9px;
            min-width: 25px;
        }
        .timer-toggle-btn {
            width: 20px;
            height: 20px;
            font-size: 10px;
            top: 3px;
            right: 6px;
        }
        .timer-notification-icon {
            width: 45px;
            height: 45px;
            bottom: 10px;
            left: 10px;
        }
    }
</style>

<script>
    function updateCountdown() {
        const now = new Date();
        const targetDate = new Date(now.getFullYear(), 5, 30, 23, 59, 59);
        if (targetDate < now) targetDate.setFullYear(now.getFullYear() + 1);
        
        const diff = targetDate - now;
        const d = Math.floor(diff / (1000 * 60 * 60 * 24));
        const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const s = Math.floor((diff % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = d + 'd';
        document.getElementById('hours').textContent = h + 'h';
        document.getElementById('minutes').textContent = m + 'm';
        document.getElementById('seconds').textContent = s + 's';
    }

    function toggleTimer() {
        const timer = document.getElementById('earlyBirdTimer');
        
        if (timer.classList.contains('hidden')) {
            // SHOW TIMER
            timer.classList.remove('hidden');
            const notifIcon = document.getElementById('timerNotificationIcon');
            if (notifIcon) notifIcon.remove();
        } else {
            // HIDE TIMER
            timer.classList.add('hidden');
            
            // Create the notification icon
            const notifIcon = document.createElement('div');
            notifIcon.id = 'timerNotificationIcon';
            notifIcon.className = 'timer-notification-icon';
            notifIcon.innerHTML = '<i class="fas fa-bell"></i>';
            notifIcon.onclick = toggleTimer; // Link it back to show
            document.body.appendChild(notifIcon);
        }
    }

    // Attach event listener properly
    document.getElementById('timerToggle').addEventListener('click', toggleTimer);

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>