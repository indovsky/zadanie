// Simple debounce function
let timeout;

/**
 * Debounce function
 * @param {function} cb callback function
 * @param {int} delay delay time
 */
export function debounce(cb, delay = 200) {
	clearTimeout(timeout);
    timeout = setTimeout(cb, delay);
}
