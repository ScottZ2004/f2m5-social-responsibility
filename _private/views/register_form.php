<?php $this->layout('layouts::website') ?>

<h3>Inschrijven</h3>

<p>Schrijf u snel in op de Website om gebruik te maken van alle fantastiche features.</p>

<form action="<?php echo url('register.handle')?>">
    <div>
        <label for="email">Email</label>
        <input type="email">
        <small>We delen uw email adres met niemand, uw gegevens zijn veilig!</small>
    </div>
    <div>
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password">
    </div>
    <button>Registeren</button>
</form>