class Calculator {
    constructor(previousOperandElement, currentOperandElement) {
        this.previousOperandElement = previousOperandElement;
        this.currentOperandElement = currentOperandElement;
        this.clear();
    }

    clear() {
        this.currentOperand = '0';
        this.previousOperand = '';
        this.operation = undefined;
        this.shouldResetScreen = false;
    }

    delete() {
        if (this.currentOperand === 'Error' || this.currentOperand === 'Infinity') {
            this.clear();
            return;
        }
        if (this.currentOperand === '0') return;
        this.currentOperand = this.currentOperand.toString().slice(0, -1);
        if (this.currentOperand === '') this.currentOperand = '0';
    }

    appendNumber(number) {
        if (this.shouldResetScreen || this.currentOperand === 'Error' || this.currentOperand === 'Infinity') {
            this.currentOperand = '';
            this.shouldResetScreen = false;
        }
        if (number === '.' && this.currentOperand.includes('.')) return;
        if (this.currentOperand === '0' && number !== '.') {
            this.currentOperand = number.toString();
        } else {
            this.currentOperand = this.currentOperand.toString() + number.toString();
        }
    }

    chooseOperation(operation) {
        if (this.currentOperand === 'Error' || this.currentOperand === 'Infinity') return;
        if (this.currentOperand === '' && this.previousOperand !== '') {
            this.operation = operation;
            return;
        }
        if (this.previousOperand !== '') {
            this.compute();
        }
        this.operation = operation;
        this.previousOperand = this.currentOperand;
        this.currentOperand = '';
        this.shouldResetScreen = false;
    }

    compute() {
        let computation;
        const prev = parseFloat(this.previousOperand);
        const current = parseFloat(this.currentOperand);
        if (isNaN(prev) || isNaN(current)) return;
        switch (this.operation) {
            case '+':
                computation = prev + current;
                break;
            case '-':
                computation = prev - current;
                break;
            case '×':
                computation = prev * current;
                break;
            case '÷':
                if (current === 0) {
                    this.currentOperand = 'Error';
                    this.operation = undefined;
                    this.previousOperand = '';
                    return;
                }
                computation = prev / current;
                break;
            default:
                return;
        }
        this.currentOperand = computation.toString();
        this.operation = undefined;
        this.previousOperand = '';
        this.shouldResetScreen = true;
    }

    scientificOperation(action) {
        if (this.currentOperand === 'Error' || this.currentOperand === 'Infinity') return;
        let computation;
        const current = parseFloat(this.currentOperand);

        if (isNaN(current) && action !== 'pi') return;

        switch (action) {
            case 'sin':
                computation = Math.sin(current * Math.PI / 180);
                break;
            case 'cos':
                computation = Math.cos(current * Math.PI / 180);
                break;
            case 'tan':
                computation = Math.tan(current * Math.PI / 180);
                break;
            case 'log':
                if (current <= 0) computation = NaN;
                else computation = Math.log10(current);
                break;
            case 'ln':
                if (current <= 0) computation = NaN;
                else computation = Math.log(current);
                break;
            case 'sqrt':
                if (current < 0) computation = NaN;
                else computation = Math.sqrt(current);
                break;
            case 'pow':
                computation = Math.pow(current, 2);
                break;
            case 'pi':
                computation = Math.PI;
                break;
            case 'exp':
                computation = Math.exp(current);
                break;
            case 'factorial':
                if (current < 0 || !Number.isInteger(current)) computation = NaN;
                else computation = this.factorial(current);
                break;
            default:
                return;
        }

        if (isNaN(computation)) {
            this.currentOperand = 'Error';
        } else if (!isFinite(computation)) {
            this.currentOperand = 'Infinity';
        } else {
            this.currentOperand = computation.toString();
        }
        this.shouldResetScreen = true;
    }

    factorial(n) {
        if (n === 0) return 1;
        let res = 1;
        for (let i = 2; i <= n; i++) res *= i;
        return res;
    }

    getDisplayNumber(number) {
        if (number === 'Error') return 'Error';
        if (number === 'Infinity') return 'Error'; // Show Error for Infinity for simplicity

        const stringNumber = number.toString();
        const parts = stringNumber.split('.');
        const integerDigits = parseFloat(parts[0]);
        const decimalDigits = parts[1];

        let integerDisplay;
        if (isNaN(integerDigits)) {
            integerDisplay = parts[0] === '-' ? '-' : '';
        } else {
            integerDisplay = integerDigits.toLocaleString('en', { maximumFractionDigits: 0 });
        }

        if (decimalDigits != null) {
            return `${integerDisplay}.${decimalDigits}`;
        } else {
            return integerDisplay;
        }
    }

    updateDisplay() {
        this.currentOperandElement.innerText = this.getDisplayNumber(this.currentOperand);
        if (this.operation != null) {
            this.previousOperandElement.innerText =
                `${this.getDisplayNumber(this.previousOperand)} ${this.operation}`;
        } else {
            this.previousOperandElement.innerText = '';
        }
    }
}

const numberButtons = document.querySelectorAll('[data-number]');
const operationButtons = document.querySelectorAll('.btn-operator');
const equalsButton = document.querySelector('[data-action="equals"]');
const deleteButton = document.querySelector('[data-action="delete"]');
const allClearButton = document.querySelector('[data-action="all-clear"]');
const scientificButtons = document.querySelectorAll('.scientific-btn');
const previousOperandElement = document.getElementById('previous-operand');
const currentOperandElement = document.getElementById('current-operand');

const calculator = new Calculator(previousOperandElement, currentOperandElement);

numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.appendNumber(button.innerText);
        calculator.updateDisplay();
    });
});

operationButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.chooseOperation(button.innerText);
        calculator.updateDisplay();
    });
});

equalsButton.addEventListener('click', button => {
    calculator.compute();
    calculator.updateDisplay();
});

allClearButton.addEventListener('click', button => {
    calculator.clear();
    calculator.updateDisplay();
});

deleteButton.addEventListener('click', button => {
    calculator.delete();
    calculator.updateDisplay();
});

scientificButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.scientificOperation(button.dataset.action);
        calculator.updateDisplay();
    });
});

// Mode Switching Logic
const btnBasic = document.getElementById('btn-basic');
const btnScientific = document.getElementById('btn-scientific');
const calculatorEl = document.getElementById('calculator');

btnBasic.addEventListener('click', () => {
    btnBasic.classList.add('active');
    btnScientific.classList.remove('active');
    calculatorEl.classList.add('basic-mode');
    calculatorEl.classList.remove('scientific-mode');
});

btnScientific.addEventListener('click', () => {
    btnScientific.classList.add('active');
    btnBasic.classList.remove('active');
    calculatorEl.classList.add('scientific-mode');
    calculatorEl.classList.remove('basic-mode');
});
