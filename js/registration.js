document.addEventListener('DOMContentLoaded', () => {

  const submitButton = document.getElementById('btn-register');
  const feedback = document.getElementById('register-feedback');
  const categorySelect = document.getElementById('category');
  const totalPriceEl = document.getElementById('total-price');

  function updateTotalPrice() {
    const selected = categorySelect.options[categorySelect.selectedIndex];
    const priceText = selected.textContent;
    const priceMatch = priceText.match(/Rp\s*([\d.]+)/);

    let price = 0;
    if (priceMatch) {
      price = parseInt(priceMatch[1].replace(/\./g, ''), 10);
    }

    if (totalPriceEl) {
      totalPriceEl.textContent = 'Rp ' + price.toLocaleString('id-ID');
    }
  }

  if (categorySelect && totalPriceEl) {
    categorySelect.addEventListener('change', updateTotalPrice);
    updateTotalPrice();
  }

  if (!submitButton) {
    return;
  }

  submitButton.addEventListener('click', async () => {
    feedback.classList.remove('hidden');
    feedback.className = 'text-sm mt-2 text-red-400';

    const teamName = document.getElementById('team-name').value.trim();
    const origin = document.getElementById('origin').value.trim();
    const category = categorySelect.value;
    const captainName = document.getElementById('captain-name').value.trim();
    const captainPhone = document.getElementById('captain-phone').value.trim();
    const captainEmail = document.getElementById('captain-email').value.trim();

    if (!teamName || !origin || !category || !captainName || !captainPhone || !captainEmail) {
      feedback.textContent = 'Harap isi semua field yang bertanda *';
      return;
    }

    if (!captainEmail.includes('@')) {
      feedback.textContent = 'Format email tidak valid';
      return;
    }

    const payload = {
      team_name: teamName,
      origin: origin,
      category: category,
      captain_name: captainName,
      captain_phone: captainPhone,
      captain_email: captainEmail,
      total_price: parseInt(totalPriceEl.textContent.replace(/[^\d]/g, ''), 10) || 0
    };

    try {
      const response = await fetch('/Domba-Cup/api/register.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });

      const result = await response.json();

      if (result.success) {
        feedback.className = 'text-sm mt-2 text-green-400';
        feedback.textContent = result.message || 'Pendaftaran berhasil!';
        submitButton.disabled = true;
        submitButton.textContent = 'Terdaftar';
      } else {
        feedback.textContent = result.message || 'Pendaftaran gagal';
      }
    } catch (error) {
      feedback.textContent = 'Terjadi kesalahan jaringan';
    }
  });
});
