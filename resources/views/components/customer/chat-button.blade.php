<!-- resources/views/components/chat-button.blade.php -->
<a href="/cust-chat" id="chat-button" class="btn btn-purple rounded-circle">
    <i class="bi bi-chat-dots" style="font-size: 1.5rem;"></i>
</a>

<style>
    #chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
</style>
