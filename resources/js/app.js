import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import dashboard from './components/dashboard';
import './bootstrap';

Alpine.data('dashboard', dashboard);
Livewire.start();
