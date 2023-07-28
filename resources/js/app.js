import dashboard from './components/dashboard';
import Alpine from 'alpinejs';
import './bootstrap';

window.Alpine = Alpine;
Alpine.data('dashboard', dashboard);
Alpine.start();
