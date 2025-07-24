export function formatCurrency(value, locale = 'id-ID', currency = 'IDR') {
  if (typeof value !== 'number') {
    value = parseFloat(value)
  }
  if (isNaN(value)) return 'Rp 0'

  return new Intl.NumberFormat(locale, {
    style: 'currency',
    currency: currency,
    minimumFractionDigits: 0,
  }).format(value)
}
